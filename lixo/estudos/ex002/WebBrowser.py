# importar bibliotecas
import webbrowser
from tkinter import *
root = Tk()

# layout tela
root.title("WebBrowser")
root.geometry("300x200")

# site para abrir
def google():
    webbrowser.open("www.google.com")

# brir site    
mygoogle = Button(root, text="Abrir Google", command=google).pack(pady=20)
root.mainloop()