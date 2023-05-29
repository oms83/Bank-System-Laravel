use Illuminate\Http\Request;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
public function index(Request $request){
        $currencies = Currency::paginate(20);
        return view('pages.currencies', compact('currencies'));
    }

    public function store(Request $request){

        try{

            if( Auth::user()?->can('add-currency') ){
                $currency = new Currency();
                $currency->name = $request->name;
                $currency->symbol = $request->symbol;
                $currency->save();
                return back()->withInput()->with('success', 'Currency Addition Successful');
            }

            return back()->withInput()->with('error', 'Currency Addition Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){
            return back()->withInput()->with('error', 'Currency Addition Failed. An Error Occurred Please Try Again Later');
        }

    }


    public function update(Request $request,int $id){

        try{

            if( Auth::user()?->can('edit-currency') ){
                $currency = Currency::findOrfail($id);
                $currency->name = $request->name;
                $currency->symbol = $request->symbol;
                $currency->save();
                return back()->withInput()->with('success', 'Currency Update Successful');
            }

            return back()->withInput()->with('error', 'Currency Update Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){
            return back()->withInput()->with('error', 'Currency Update Failed. An Error Occurred Please Try Again Later');
        }

    }
