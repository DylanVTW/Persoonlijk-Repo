#Game.py
from playsound import playsound
from Card import Card

class Game:
    def __init__(self, player):
        # declares a bunch of variables
        self.player = player
        self.current_value = 1
        self.old_value = 1
        self.bet = "empty"
        self.rounds_played = 0
        self.card = Card()

    def card_calc(self):
        # if input x
        if self.bet == "h":
            # if old less then new then win
            if self.old_value < self.current_value:
                print("You win :D")
                self.player.win_bet()
            # else lose
            elif self.old_value > self.current_value:
                print("You lose :(")
                self.player.lose_bet()
                
        elif self.bet == "l":
            if self.old_value > self.current_value:
                print("You win :D")
                self.player.win_bet()
            elif self.old_value < self.current_value:
                print("You lose :(")
                self.player.lose_bet()
                
        elif self.bet == "g":
            if self.old_value == self.current_value:
                print("You win :D")
                self.player.tie_bet()
            else:
                print("You lose :(")
                self.player.lose_bet()
        
        # sets old value, and adds to rounds played
        self.old_value = self.current_value
        self.rounds_played += 1

    def function_dump(self):
        self.player.place_bet() # calls function
        current_card = self.card.get_card() # sets variable as return of function
        self.current_value = current_card # sets other variable to value of variale
        self.card_calc() # runs card calc
        self.player.update_high_score() # upddates the players high score
        if self.player.balance <= 0: # if you lost the game
            self.player.leave(self.rounds_played) # display rounds played
        else:
            sigma_rizz_goon = input(f"continue or cash out? (c/co)  ").lower() # makes input for cashing out or continue
            if sigma_rizz_goon in ["c", "continue"]: 
                self.start_game() # starts game with function
            elif sigma_rizz_goon in ["co", "cash out", "cashout"]:
                playsound("sounds/leaving.mp3")
                self.player.leave(self.rounds_played) # lose / quit
            else:
                print(f"Input Error: ({sigma_rizz_goon}) is an invalid input")

    def start_game(self):
        if self.player.balance <= 0: # if broke then die
            self.player.leave(self.rounds_played)
        else:
            self.old_value = self.current_value # makes the old value the current value, aka makes a new old value b4 generating card
            current_card_value = 0 # idk but without it the code breaks, i changed like 19/12, but i forgor why
            self.current_value = current_card_value # sets varaible as variable
            
            hoger_lager = input("Hoger, Lager of Gelijk? (h/l/g)   ").lower()
            if hoger_lager in ["h", "hoger"]:
                self.bet = "h"
                self.function_dump()
            elif hoger_lager in ["l", "lager"]:
                self.bet = "l"
                self.function_dump()
            elif hoger_lager in ["g", "gelijk"]:
                self.bet = "g"
                self.function_dump()
            else:
                print(f"Input Error: ({hoger_lager}) is an invalid input")

    def get_rounds_played(self):
        return self.rounds_played # returns rounds played int