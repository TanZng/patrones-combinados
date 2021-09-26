import Libro


class LibroVentisca(Libro):
    def __init__(self, duracion, texto):
        super().__init__(duracion, texto)

    @property
    def duracion(self):
        return self.__duracion

    @duracion.setter
    def duracion(self, new):
        self.__duracion = new

    @property
    def texto(self):
        return self.__texto

    @texto.setter
    def duracion(self, new):
        self.__texto = new

    def verStats(self):
        return f"Libro ventisca \
                Duración: {self.__duracion} \
                Escrito antiguo: {self.__texto}"
