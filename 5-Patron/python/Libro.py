import abc


class Libro(abc.ABC):
    def __init__(self, duracion, texto) -> None:
        super().__init__()
        self.__duracion = duracion
        self.__texto = texto

    @abc.abstractmethod
    def verStats(self):
        pass
