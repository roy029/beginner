

def mae(filename):
    with open(filename) as f:
        lines = []
        for line in f.readlines():
            line = line.strip()
            line = line.replace('"', '').replace('．', '。').replace('.', '。').replace('，', '、')
            lines.append(line)
        lines = ''.join(lines).split('。')
        for line in lines:
            print(line+'。')

mae('kaken.txt')        

