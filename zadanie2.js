let usersArr = [
    {userName: "Adam Kowalski", 
     birthYear: 1983,
     salary: 4200  },
     ///
     {userName: "Jan Kowalski", 
     birthYear: 1980,
     salary: 16200  },
     ///
     {userName: "Emil Jurkowski", 
     birthYear: 1990,
     salary: 6200  },
     ///
     {userName: "Dawid Kaletyński", 
     birthYear: 1964,
     salary: 3200  },
     ///
     {userName: "Andrzej Dragon", 
     birthYear: 1996,
     salary: 8200  },
     ///
     {userName: "Jakub Kowal", 
     birthYear: 1970,
     salary: 14200  },
     ///
     {userName: "Igor Tomaszewski", 
     birthYear: 1985,
     salary: 8240  },
     ///
     {userName: "Zbigniew Nowak", 
     birthYear: 1993,
     salary: 6200  },
     ///
     {userName: "Tadeusz Borek", 
     birthYear: 1986,
     salary: 7200  },
     ///
     {userName: "Ewelina Lisowska", 
     birthYear: 2000,
     salary: 2200  },
     ///
     {userName: "Bartłomiej Józefowicz", 
     birthYear: 1987,
     salary: 7200  },
     ///
     {userName: "Kamila Nowaczek", 
     birthYear: 1988,
     salary: 14000  },
     ///
]
function showInfo (){
    for (const el of usersArr){
        let obliczony_wiek_rocznikowy = (new Date().getFullYear() -el.birthYear)
        switch(el.salary){
            case(el.salary>1500):{
                console.log("elo")
            }
        }
        if(el.salary >15000 ){
            console.log("witaj prezesie")
        }
        else if(el.salary <5000 && el.birthYear%2 == 0){
            console.log(`${el.userName}, szykuj się na podwyżkę`)
        }
        const a = (el.birthYear%2 != 0) ? console.log(`${el.userName}, jesteś zwolniony!`) : console.log(`Witaj ${el.userName}, w tym roku kończysz ${obliczony_wiek_rocznikowy} lat!`)
    }
}
showInfo()