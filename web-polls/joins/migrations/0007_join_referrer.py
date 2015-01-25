# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models, migrations


class Migration(migrations.Migration):

    dependencies = [
        ('joins', '0006_auto_20150116_0845'),
    ]

    operations = [
        migrations.AddField(
            model_name='join',
            name='referrer',
            field=models.ForeignKey(related_name='Referred Me', blank=True, to='joins.Join', null=True),
            preserve_default=True,
        ),
    ]
