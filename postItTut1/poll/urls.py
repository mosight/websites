__author__ = 'yuewanghuang'

from django.conf.urls import patterns, url

from poll import views

urlpatterns = patterns('',
    url(r'^$', views.index, name='index'),
    url(r'^(?P<question_id>\d+)/$', views.details, name="details"),
    url(r'^(?P<question_id>\d+)/results/$', views.results, name="results"),
    url(r'^(?P<question_id>\d+)/votes/$', views.votes, name="votes"),
)
