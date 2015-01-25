# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('joins', '0003_auto_20141228_0749'),
    ]

    operations = [
        migrations.AddField(
            model_name='join',
            name='ref_id',
            field=models.CharField(default=b'default', max_length=128),
            preserve_default=True,
        ),
    ]
