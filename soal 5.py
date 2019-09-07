# Soal 5 Menghitung Hurup Hidup

def countVokal(text):
    text = text.lower()
    count = 0
    for i in range (len(text)) :
        if(text[i]== 'a' or text[i]== 'i' or text[i]== 'u' or text[i]== 'e' or text[i]== 'o'):
            count +=1
        else :
            count += 0
    print(count)



#main program

text = input ('Masukkan text : ')
text = str(text)
countVokal(text)

