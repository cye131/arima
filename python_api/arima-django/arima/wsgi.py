"""
WSGI config for arima project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/2.0/howto/deployment/wsgi/
"""
#import sys

#sys.path.append('/var/www/arima/py3.6-venv/lib/python3.6/site-packages')

#sys.path.remove('/usr/lib/python35.zip')
#sys.path.remove('/usr/lib/python3.5')
#activate_this = '/var/www/arima/python-venv/bin/activate_this.py'
#with open(activate_this) as file_:
 #   exec(file_.read(), dict(__file__=activate_this))


#sys.path.append('/var/www/arima/python-venv/bin/python3.6')
#sys.path.append('/var/www/arima/python-venv')

import os

from django.core.wsgi import get_wsgi_application

os.environ.setdefault("DJANGO_SETTINGS_MODULE", "arima.settings")

application = get_wsgi_application()
