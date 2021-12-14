import os

from django.urls import re_path
from django.http import HttpResponse, HttpRequest


FLAG = "flag{cache_poison}"
ADMIN_TOKEN = "admin token"


def flag(request: HttpRequest):
    token = request.COOKIES.get("token")
    if not token or token != ADMIN_TOKEN:
        return HttpResponse("Only admin can view this!")
    return HttpResponse(FLAG)


def index(request: HttpRequest):
    return HttpResponse("Not thing here, check out /flag.")


urlpatterns = [
    re_path('index', index),
    re_path('flag', flag)
]
