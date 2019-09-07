def printTriangle (n):
    for row in range (n):
        for col in range(n+2):
            if row == 0 or row==col or row+col==1+n:
                print("*",end="")
            else:
                print(end=" ")
        print()

n = int(input("masukkan Input : "))
printTriangle(3)
            
