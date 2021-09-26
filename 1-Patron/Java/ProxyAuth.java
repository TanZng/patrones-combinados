package masterwholeproxy;

public class ProxyAuth implements IAuth {
    private Account account;
    
    public ProxyAuth(Account account){
        this.account = account;
    }
    @Override
    public boolean SolicitarAuth(){
        return this.account.autenticar();
    }
}
