from django.shortcuts import render
from django.views import generic
# Create your views here.
from .forms import JoinForm
from .models import Join

def get_ip(request):
    try:
        x_forward = request.META.get("HTTP_X_FORWARDED_FOR")
        if x_forward:
            ip = x_forward.split(",")[0]
        else:
            ip = request.META.get("REMOTE_ADDR")
    except:
        ip = '0.0.0.0'
    return ip

import uuid

def get_ref_id():
    ref_id = str(uuid.uuid4())[:11].replace('-','')
    print ref_id
    try:
        id_existed = Join.objects.get(ref_id=ref_id)
        get_ref_id() # try until a unit id is found
    except:
        return ref_id


class IndexView(generic.FormView):
    form_class = JoinForm
    template_name = "joins/index.html"

    def get(self, request, *args, **kwargs):
        try:
            self.referrer_id = request.session["ref_id"]
        except:
            self.referrer_id = None
        return super(IndexView, self).get(request, args, kwargs)

    def form_valid(self, form):
        #print form.__class__
        #form.save()
        email = form.cleaned_data['email']
        new_join_old, created = Join.objects.get_or_create(email=email)
        if created:
            new_join_old.ref_id = get_ref_id()
            new_join_old.ip_address = get_ip(self.request)
            if self.referrer_id:
                new_join_old.referrer = Join.objects.get(id=self.referrer_id)
            new_join_old.save()
        self.success_url = "/joins/%s" % new_join_old.ref_id
        return super(IndexView, self).form_valid(form)

class ShareView(generic.TemplateView):
# def home(request):
#     form = JoinForm(request.POST or None)
#     context = {'form': form}
#     template = "joins/index.html"
#  h   return render(request, template, context)
    #form_class = JoinForm
    template_name = "joins/share.html"