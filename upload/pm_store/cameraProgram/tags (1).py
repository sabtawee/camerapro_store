import tkinter as tk
import tkinter.font as tkFont

class App:
    def __init__(self, root):
        #setting title
        root.title("undefined")
        #setting window size
        width=1124
        height=874
        screenwidth = root.winfo_screenwidth()
        screenheight = root.winfo_screenheight()
        alignstr = '%dx%d+%d+%d' % (width, height, (screenwidth - width) / 2, (screenheight - height) / 2)
        root.geometry(alignstr)
        root.resizable(width=False, height=False)

        GButton_840=tk.Button(root)
        GButton_840["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        GButton_840["font"] = ft
        GButton_840["fg"] = "#000000"
        GButton_840["justify"] = "center"
        GButton_840["text"] = "Button"
        GButton_840.place(x=390,y=260,width=342,height=84)
        GButton_840["command"] = self.GButton_840_command

        GButton_512=tk.Button(root)
        GButton_512["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        GButton_512["font"] = ft
        GButton_512["fg"] = "#000000"
        GButton_512["justify"] = "center"
        GButton_512["text"] = "Button"
        GButton_512.place(x=750,y=260,width=342,height=84)
        GButton_512["command"] = self.GButton_512_command

        GButton_688=tk.Button(root)
        GButton_688["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        GButton_688["font"] = ft
        GButton_688["fg"] = "#000000"
        GButton_688["justify"] = "center"
        GButton_688["text"] = "Button"
        GButton_688.place(x=30,y=260,width=342,height=84)
        GButton_688["command"] = self.GButton_688_command

        GLabel_752=tk.Label(root)
        ft = tkFont.Font(family='Times',size=10)
        GLabel_752["font"] = ft
        GLabel_752["fg"] = "#333333"
        GLabel_752["justify"] = "center"
        GLabel_752["text"] = "label"
        GLabel_752.place(x=450,y=170,width=233,height=60)

        GLabel_640=tk.Label(root)
        ft = tkFont.Font(family='Times',size=10)
        GLabel_640["font"] = ft
        GLabel_640["fg"] = "#333333"
        GLabel_640["justify"] = "center"
        GLabel_640["text"] = "label"
        GLabel_640.place(x=0,y=0,width=1122,height=82)

    def GButton_840_command(self):
        print("command")


    def GButton_512_command(self):
        print("command")


    def GButton_688_command(self):
        print("command")

if __name__ == "__main__":
    root = tk.Tk()
    app = App(root)
    root.mainloop()
