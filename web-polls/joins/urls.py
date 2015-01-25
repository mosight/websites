__author__ = 'yuewanghuang'

from django.conf.urls import patterns, url
from joins import views

urlpatterns = patterns('',
                       url(r'^$', views.IndexView.as_view(), name='home'),
                       url(r'^(?P<ref_id>.*)$', views.ShareView.as_view(), name='share'),
                       #url(r'join/$','',name='join'),
)
