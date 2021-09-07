class Arma(object):

    def __init__(self, nombre, danio_infligido, hechizo, duracion, nivel):
        self.nombre = nombre
        self.danio_infligido = danio_infligido
        self.hechizo = hechizo
        self.duracion = duracion
        self.nivel = nivel
        self.hechizo = None

    def aumentarDaño(self, aumento):
        self.danio_recibido += aumento

    def setHechizo(self, hechizo):
        self.hechizo = hechizo

    def incNivel(self):
        self.nivel += 1
