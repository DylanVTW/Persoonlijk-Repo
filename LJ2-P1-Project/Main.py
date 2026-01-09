#Main.py
from Game import Game
from Player import Player
from Card import Card

def main():
    # coole title, gemaakt door benno
    print("""
    /$$   /$$                                                          /$$$$$$        /$$                                              
    | $$  | $$                                                         /$$__  $$      | $$                                              
    | $$  | $$  /$$$$$$   /$$$$$$   /$$$$$$   /$$$$$$         /$$$$$$ | $$  \__/      | $$        /$$$$$$   /$$$$$$   /$$$$$$   /$$$$$$ 
    | $$$$$$$$ /$$__  $$ /$$__  $$ /$$__  $$ /$$__  $$       /$$__  $$| $$$$          | $$       |____  $$ /$$__  $$ /$$__  $$ /$$__  $$
    | $$__  $$| $$  \ $$| $$  \ $$| $$$$$$$$| $$  \__/      | $$  \ $$| $$_/          | $$        /$$$$$$$| $$  \ $$| $$$$$$$$| $$  \__/
    | $$  | $$| $$  | $$| $$  | $$| $$_____/| $$            | $$  | $$| $$            | $$       /$$__  $$| $$  | $$| $$_____/| $$      
    | $$  | $$|  $$$$$$/|  $$$$$$$|  $$$$$$$| $$            |  $$$$$$/| $$            | $$$$$$$$|  $$$$$$$|  $$$$$$$|  $$$$$$$| $$      
    |__/  |__/ \______/  \____  $$ \_______/|__/             \______/ |__/            |________/ \_______/ \____  $$ \_______/|__/      
                        /$$  \ $$                                                                         /$$  \ $$                    
                       |  $$$$$$/                                                                        |  $$$$$$/                    
                        \______/                                                                          \______/                                             
    """)

    player = Player(balance=100) # gives the player a startjng balance
    print(f"current balance: {player.balance}") # print balance
    
    # declares the 2 goobers
    game = Game(player)
    card = Card()
    
    current_card_value = card.get_card() # maakt een starting card
    game.current_value = current_card_value # value assighning blah
    game.start_game() # start duh game

if __name__ == "__main__":
    main()