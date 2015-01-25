from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
# Create your views here.
from poll.models import Question, Answer
from django.shortcuts import get_object_or_404
from django.core.urlresolvers import reverse
from django.views import generic
from django.utils import timezone
import time

class IndexView(generic.ListView):
    template_name = "polls/index.html"
    context_object_name = 'latest_question_list'

    def get_queryset(self):
        curr_time = timezone.now()
        return Question.objects.filter(pub_time__lte=curr_time).order_by('-pub_time')[:5]


class DetailView(generic.DetailView):
    model = Question #Question as the args, will automatically trigger 404 if not found
    template_name = 'polls/details.html'
    def get_queryset(self):
        curr_time = timezone.now()
        return Question.objects.filter(pub_time__lte=curr_time)

class ResultsView(generic.DetailView):
    model = Question
    template_name = 'polls/results.html'

'''

def index(request):
    latest_question_list = Question.objects.order_by('-pub_time')[:5]
    #output = ', '.join([p.question_text for p in latest_question_list])
    context = {'latest_question_list': latest_question_list}
    return render(request, 'polls/index.html', context)


def details(request, question_id):
    question = get_object_or_404(Question, pk=question_id)  # minimize coupling between model and view
    return render(request, 'polls/details.html', {'question': question})


def results(request, question_id):
    q = get_object_or_404(Question, pk=question_id)
    return render(request, 'polls/results.html', {'question': q})
'''


def votes(request, question_id):
    q = get_object_or_404(Question, pk=question_id)
    try:
        selected_answer = q.answer_set.get(pk=request.POST['answer'])
    except (KeyError, Answer.DoesNotExist):
        return render(request, 'polls/details.html', {'question': q, 'error_message': "You didn't select a vote!"})
        time.sleep(10)
    else:
        selected_answer.votes += 1
        selected_answer.save()
    return HttpResponseRedirect(reverse('polls:results', args=(q.id,)))
