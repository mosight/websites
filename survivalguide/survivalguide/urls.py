from django.conf.urls import patterns, include, url
from django.contrib import admin
from view import HomePageView
from view import SignUpView

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'survivalguide.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),
    url(r'^$', HomePageView.as_view(), name="home"),
    url(r'^register/$', SignUpView.as_view(), name="signup"),
    url(r'^admin/', include(admin.site.urls)),
)
