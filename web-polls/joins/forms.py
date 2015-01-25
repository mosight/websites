__author__ = 'yuewanghuang'
from django import forms
from .models import Join

class JoinForm(forms.ModelForm):
    class Meta:
        model = Join
        fields = ['email',]
    def addJoin(self):
        print "added a member!!"
# class JoinForm(forms.Form):
#     email = forms.EmailField()
#