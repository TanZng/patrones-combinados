class Tesoro():
    def __init__(self, bonus, monedas):
        self.__bonus = bonus
        self.__monedas = monedas

    @property
    def bonus(self):
        return self.__bonus

    @bonus.setter
    def bonus(self, new):
        self.__bonus = new

    @property
    def monedas(self):
        return self.__monedas

    @monedas.setter
    def monedas(self, new):
        self.__monedas = new

    def incBonus(self):
        self.__bonus += 1.01

    def getMonedas(self):
        return int(self.__bonus * self.__monedas)
