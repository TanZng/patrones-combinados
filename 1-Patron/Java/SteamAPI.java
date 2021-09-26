package masterwholeproxy;
public class SteamAPI implements IAuth{
    private Account account;
    
    public SteamAPI(Account account){
        this.account = account;
    }
    @Override
    public boolean SolicitarAuth(){
        return this.account.authLogin();
    }

}
