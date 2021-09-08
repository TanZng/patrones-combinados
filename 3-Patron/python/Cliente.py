class Cliente():
    def __init__(self, nombre, apellido, edad, correo, contrasena):
        self.__nombre = nombre
        self.__apellido = apellido
        self.__edad = edad
        self.__correo = correo
        self.__contrasena = contrasena

    @property
    def nombre(self):
        return self.__nombre

    @property.setter
    def nombre(self, new_nombre):
        self.__nombre = new_nombre

    @property
    def apellido(self):
        return self.__apellido

    @property.setter
    def apellido(self, new_apellido):
        self.__apellido = new_apellido

    @property
    def edad(self):
        return self.__edad

    @property.setter
    def edad(self, new_edad):
        self.__edad = new_edad

    @property
    def correo(self):
        return self.__correo

    @property.setter
    def correo(self, new_correo):
        self.__correo = new_correo

    @property
    def contrasena(self):
        return self.__contrasena

    @property.setter
    def contrasena(self, new_contrasena):
        self.__contrasena = new_contrasena

    def autenticar(self):
        pass