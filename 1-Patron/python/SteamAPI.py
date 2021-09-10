import IAuth
class SteamAPI(IAuth):
    def __init__(self, account):
        self.account = account

    def solicitarAuth(self):
        return self.account.authLogin()