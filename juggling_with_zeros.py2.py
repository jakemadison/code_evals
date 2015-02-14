__author__ = 'jmadison'


import fileinput

def main():

    for line in fileinput.input(files='/home/jmadison/Development/code_evals/testfile'):
    # for line in fileinput.input():
        line = line.strip()
        if not line:
            continue

        commands = line.split(' ')

        print commands





if __name__ == '__main__':
    main()