#Player.py
class Player:
    # declates and keeps balance
    def __init__(self, balance=100):
        self.balance = balance
        self.high_score = balance
        self.bet_amount = 0

    def place_bet(self):
        while True: # honestly, is wss niet nodig, maar is wel grappig
            bet_amount = input("how much do you want to bet? (numb/all)  ").lower() # input voor bet amount
            if bet_amount == "all":
                self.bet_amount = self.balance # if all in then go all in
                break
            elif bet_amount.isdigit(): # if input is number
                self.bet_amount = int(bet_amount)  # int declare
                if self.bet_amount > self.balance: # if ur to broke
                    print("broke fein, you can't afford that much.")
                    continue
                break
            else:
                print("invalid input enter a number or 'all'.")

        self.balance -= self.bet_amount # balance - bet amount
        print(f"bet placed: {self.bet_amount} remaining balance: {self.balance}\n") # display info

    def win_bet(self): # if u win
        result = self.bet_amount * 2 # 2x your bet
        self.balance += result # get your winnings back
        print(f"you bet {self.bet_amount} and won {result} new balance: {self.balance}\n") # display

    def lose_bet(self):
        result = self.bet_amount * 0
        self.balance -= result
        print(f"you bet {self.bet_amount} and lost new balance: {self.balance}\n")

    def tie_bet(self):
        result = self.bet_amount * 13
        self.balance += result
        print(f"you bet {self.bet_amount} and won {result}. new balance: {self.balance}\n")

    def update_high_score(self): # updates high score, tja
        if self.balance > self.high_score:
            self.high_score = self.balance

    def leave(self, rounds_played): # displays lose/leave info
        print(f"\nyou go home with {self.balance} moneys")
        print(f"your high score was: {self.high_score} money")
        print(f"the amount of rounds you played: {rounds_played}\n")