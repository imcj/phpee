import os
import socket
import select

os.fork()

PIPE = os.pipe()

ready = select.select([PIPE[0]], [], [], 1.0)
# recv = os.read(PIPE[0], 1)
print ready