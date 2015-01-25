__author__ = 'yuewanghuang'

from django.views import generic
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User

class HomePageView(generic.TemplateView):
    template_name = "home.html"

class SignUpView(generic.CreateView):
    # A create view generate a table for creating instance of an model
    form_class = UserCreationForm
    model = User
    template_name = 'accounts/signup.html'