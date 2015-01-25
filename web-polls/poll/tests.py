from django.test import TestCase
from poll.models import Question, Answer
from django.utils import timezone
import datetime
from django.core.urlresolvers import reverse
# Create your tests here.

def create_question(text='', days=0):
    return Question.objects.create(question_text=text, pub_time=timezone.now()+datetime.timedelta(days=days))

class QuestionMethodTest(TestCase):
    def test_published_recently_future_question(self):
        q = create_question('future question', 1)
        self.assertEqual(q.was_published_recently(), False)
    def test_published_recently_old_question(self):
        q = create_question('old question', -3)
        self.assertEqual(q.was_published_recently(), False)
    def test_published_recently_recent_question(self):
        q = create_question('recent question', 0)
        self.assertEqual(q.was_published_recently(), True)

class QuestionIndexViewTest(TestCase):
    def test_index_view_with_no_question(self):
        response = self.client.get(reverse('polls:index'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, 'No polls are available now!')
    def test_index_view_with_a_old_question(self):
        create_question('old question', -3)
        response = self.client.get(reverse('polls:index'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, 'old question')
    def test_index_view_with_a_recent_question(self):
        create_question('recent question')
        response = self.client.get(reverse('polls:index'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, 'recent question')
    def test_index_view_with_a_future_question(self):
        create_question('future question', 3)
        response = self.client.get(reverse('polls:index'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, 'No polls are available now!')

class QuestionDetailsViewTest(TestCase):
    def test_details_view_with_future_question(self):
        q = create_question('future question', 3)
        response = self.client.get(reverse('polls:details',args=[q.id,]))
        self.assertEqual(response.status_code, 404)
    def test_details_view_with_old_question(self):
        q = create_question('old question', -3)
        response = self.client.get(reverse('polls:details',args=[q.id,]))
        self.assertContains(response, q.question_text, status_code=200) #will automatically check status_code=200


