from django.db import models

# Create your models here.

class Join(models.Model):
    email = models.EmailField(unique=True)
    ref_id = models.CharField(max_length=128,unique=True)
    ip_address = models.IPAddressField(default="0.0.0.0") #default needed for records already in the database
    date_join = models.DateTimeField('Date joined', auto_now_add=True, auto_now=False)
    date_edit = models.DateTimeField('Date edited', auto_now_add=False, auto_now=True)
    referrer = models.ForeignKey('self', related_name='Referred Me', null=True, blank=True) #ManytoOne relationship

    class Meta:
        unique_together = ('email','ref_id') #prevent duplicate

    def __str__(self):
        return self.email