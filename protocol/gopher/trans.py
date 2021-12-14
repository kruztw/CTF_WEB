with open('request', 'r') as f:
    req = f.readlines()
    
    for i in range(len(req)):
        if req[i][0] == '#':
            req[i] = ''

    req = ''.join(list(map(lambda x: x.replace('\n', '%250D%250A').replace(' ', '%2520'), req)))
    print(req)
