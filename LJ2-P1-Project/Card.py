#Card.py
import random
from Deck import Deck
from playsound import playsound

class Card:
    def __init__(self):
        self.type = ["♠️", "♣️", "♥️", "♦️"] # make funny pics
        self.deck = Deck() # roept deck op

    def get_card(self):
        current_type = random.choice(self.type) # random type
        current_card = random.choice(list(self.deck.deck.keys())) # random value van array
        current_value = self.deck.deck[current_card] # variable = random alue

        playsound('sounds/start.mp3') # plays start sound
        # makes a cool card
        card = f"""
         .--------.
        |{current_card:<2}        |
        |          |
        |    {current_type}     |
        |          |
        |       {current_card:>2} |
         `--------'
            """
        print(card)
        return current_value