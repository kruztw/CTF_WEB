import urllib.parse
from django.http import HttpResponse, HttpRequest
import time


CACHE = {}  # PATH => (Response, EXPIRE)


class SimpleMiddleware:
    def __init__(self, get_response):
        self.get_response = get_response

    def __call__(self, request: HttpRequest):
        print('---------------------------------')
        print("HttpRequest ", HttpRequest, request.path)
        print('---------------------------------')
        path = urllib.parse.urlparse(request.path).path
        if path in CACHE and CACHE[path][1] > time.time():
            return CACHE[path][0]
        response = self.get_response(request)
        CACHE[path] = (response, time.time() + 10)
        return response
