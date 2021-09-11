class Mazmorra():
    def __init__(self):
        self.__salas = []

    @property
    def salas(self):
        return self.__salas

    def addSala(self, sala):
        self.__salas.append(sala)
