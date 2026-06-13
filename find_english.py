#!/usr/bin/env python3
import re, sys

filepath = sys.argv[1]
lines = open(filepath).readlines()
count = 0

for i, line in enumerate(lines):
    line = line.strip()
    if not line or line.startswith('//'):
        continue
    m = re.match(r"^\$_LANG\['([^']+)'\]\s*=\s*'([^']*)';$", line)
    if m:
        key, val = m.groups()
        if re.search(r'[\u0600-\u06FF]', val):
            continue
        if not val or len(val) < 3:
            continue
        if re.match(r'^[\d\s\-\.:\/,\(\)\@\+]+$', val):
            continue
        if re.match(r"^[A-Za-z][\sA-Za-z0-9,.\'\"()!?&%@#\/\-:;]+$", val):
            print(f"Line {i+1}: {line}")
            count += 1

print(f"\nTotal English strings: {count}")
