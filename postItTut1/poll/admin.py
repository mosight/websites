from django.contrib import admin
from poll.models import Question, Answer
# Register your models here.

class AnswerInline(admin.TabularInline):
    model = Answer
    extra = 3

class QuestionAdmin(admin.ModelAdmin):
    fieldsets = [
        (None, {'fields':['question_text']}),
        ('Date Info',{'fields':['pub_time'],'classes':['collapse']})
    ]
    inlines = [AnswerInline]
    list_display = ['question_text','pub_time', 'was_published_recently']
    #fields = ['pub_time', 'question_text']
    list_filter = ['pub_time']
    search_fields = ['question_text']

admin.site.register(Question, QuestionAdmin)
#admin.site.register(Answer)

