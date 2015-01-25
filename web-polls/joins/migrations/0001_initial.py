# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Join',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('email', models.EmailField(max_length=75)),
                ('date_join', models.DateTimeField(auto_now_add=True, verbose_name=b'Date joined')),
                ('date_edit', models.DateTimeField(auto_now=True, verbose_name=b'Date edited')),
            ],
            options={
            },
            bases=(models.Model,),
        ),
    ]
