from django.db import models
from django.utils import timezone
import datetime

# Create your models here.

class Question(models.Model):
    question_text = models.CharField(max_length=100)
    pub_time = models.DateTimeField("date published")

    def __str__(self):
        return self.question_text

    def was_published_recently(self):
        return timezone.now() >= self.pub_time > timezone.now() - datetime.timedelta(days=1)
    # define some attributes for the method
    was_published_recently.admin_order_field='pub_time'
    was_published_recently.boolean = True
    was_published_recently.short_description = "Published Recently?"

class Answer(models.Model):
    question = models.ForeignKey(Question)
    answer_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)
    def __str__(self):
        return self.answer_text

