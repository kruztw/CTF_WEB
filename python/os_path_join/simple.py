# 參考: https://github.com/xnomas/RARCTF-2021/tree/main/web/secure_uploader
# The return value is the concatenation of path and any members of *paths with exactly one directory separator following each non-empty part except the last,
# meaning that the result will only end in a separator if the last part is empty.
# "If a component is an absolute path, all previous components are thrown away and joining continues from the absolute path component." <- 重點


import os

filename = "/flag"
print(os.path.join("uploads/", filename))
