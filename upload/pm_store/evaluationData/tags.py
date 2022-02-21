import tkinter as tk
import tkinter.font as tkFont
from tkinter import messagebox
import smtplib
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText

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

        Label_title=tk.Label(root)
        ft = tkFont.Font(family='Times',size=30)
        Label_title["font"] = ft
        Label_title["fg"] = "#333333"
        Label_title["justify"] = "center"
        Label_title["text"] = "Fast Response Email Alert HB01-HB04"
        Label_title.place(x=0,y=0,width=1122,height=82)

        Label_Name=tk.Label(root)
        ft = tkFont.Font(family='Times',size=20)
        Label_Name["font"] = ft
        Label_Name["fg"] = "#333333"
        Label_Name["justify"] = "center"
        Label_Name["text"] = "HB01"
        Label_Name.place(x=450,y=100,width=233,height=60)

        Send_hb1=tk.Button(root)
        Send_hb1["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        Send_hb1["font"] = ft
        Send_hb1["fg"] = "#000000"
        Send_hb1["justify"] = "center"
        Send_hb1["text"] = "Button"
        Send_hb1.place(x=30,y=260,width=342,height=84)
        Send_hb1["command"] = self.Send_hb1_command


        Send_hb2=tk.Button(root)
        Send_hb2["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        Send_hb2["font"] = ft
        Send_hb2["fg"] = "#000000"
        Send_hb2["justify"] = "center"
        Send_hb2["text"] = "Quality Problem"
        Send_hb2.place(x=390,y=260,width=342,height=84)
        Send_hb2["command"] = self.Send_hb2_command

        Send_hb3=tk.Button(root)
        Send_hb3["bg"] = "#efefef"
        ft = tkFont.Font(family='Times',size=10)
        Send_hb3["font"] = ft
        Send_hb3["fg"] = "#000000"
        Send_hb3["justify"] = "center"
        Send_hb3["text"] = "Quality Problem"
        Send_hb3.place(x=750,y=260,width=342,height=84)
        Send_hb3["command"] = self.Send_hb3_command

        

        

        

    def Send_hb2_command(self):
        print("command")


    def Send_hb3_command(self):
        print("command")


    def Send_hb1_command(self):
        print("command")


if __name__ == "__main__":
    root = tk.Tk()
    app = App(root)
    #root.attributes('-fullscreen',True)
    root.mainloop()
    
