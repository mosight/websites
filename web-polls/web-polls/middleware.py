__author__ = 'yuewanghuang'
from joins.models import Join
class ReferMiddleWare:
    def process_request(self, request):
        ref_id = request.GET.get('ref')
        try:
            obj = Join.objects.get(ref_id=ref_id)
        except:
            obj = None
        if obj:
            request.session['ref_id'] = obj.id
            print obj.id
        else:
            request.session['ref_id'] = None

