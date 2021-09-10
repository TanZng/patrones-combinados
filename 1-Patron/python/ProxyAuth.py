import IAuth
class ProxyAuth(IAuth):
    def __init__(self, account):
        self.account = account

    def solicitarAuth(self):
        return self.account.autenticar()
