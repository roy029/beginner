def fib(n):
    if n <= 2:
        return 1
    else:
        return fibonacci(n - 2) + fibonacci(n - 1)
        
print("n=?")
n = int(input())
