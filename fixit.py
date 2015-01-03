out = []

with open('usa2','r') as f:
 for each in f:
  each = each.strip()
  out.append(each.lower())

o = open('output','w')
for each in out:
 o.write(each)
 o.write("\n")

