import socket
from threading import Thread
import urllib.parse

HOST, PORT = '127.0.0.1', 8787

listen_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
listen_socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
listen_socket.bind((HOST, PORT))

listen_socket.listen(10)
print(f'Serving HTTP on port {PORT} ...')


def handle_resp(conn):
    request_data = conn.recv(1024).decode('utf-8').split()
    try:
        method = request_data[0]
        url = request_data[1].split("?")[0].split("#")[0]
        if method == 'GET' and url == '/':
            http_response = "HTTP/1.1 200 OK\r\nserver: localhost\r\n\r\n<html>\nhome\n</html>"""

        elif method == 'GET' and url == '/redirect':
            location = urllib.parse.unquote(request_data[1].split('location=')[1])
            http_response = f"HTTP/1.1 302 FOUND\r\nserver: localhost\r\nRefresh: 2; url = {location}\r\n\r\n<html>\nhome\n</html>"
        
        print(http_response)
    except Exception as e:
        http_response = write_code(500)

    conn.sendall(http_response.encode('utf-8'))
    conn.close()


while True:
    client_connection, client_address = listen_socket.accept()
    Thread(target=handle_resp, args=(client_connection, )).start()
