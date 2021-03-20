while True:
    try:
        print(input().upper())
    except EOFError:
        break
    except KeyboardInterrupt:
        break
exit()