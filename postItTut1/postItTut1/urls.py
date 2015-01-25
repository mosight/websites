from django.conf.urls import patterns, include, url
from django.contrib import admin
import poll
urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'postItTut1.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),
    url(r'^polls/', include('poll.urls', namespace='polls'))
)
