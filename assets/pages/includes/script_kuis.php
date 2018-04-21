<script type="text/javascript">
		function handleClick() {         
			var totalE = 0, totalI = 0;
			var kol2a=0, kol2b=0;
			var totalS = 0, totalN = 0;
			var kol4a=0, kol4b=0;
			var totalT = 0, totalF = 0;
			var kol6a=0, kol6b=0;
			var totalJ = 0, totalP = 0;
			var hasil = "";
			var i,j;   
			
			for (i=1; i <=70; i++){
				var pilihan = document.getElementsByName('group'+i);
				
				//Kol 1
				if (i % 7 == 1){
					for(j=0; j<pilihan.length; j++){
						var pil = pilihan[j];
						if (pil.checked){
							if (pil.value == "A"){
								totalE++;
							}
							else if (pil.value == "B"){
								totalI++;
							}
						}
					}
				}


				//Kol 2 & 3
				if (i % 7 == 2 || i % 7 == 3){
					if (i % 7 == 2){
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									kol2a++;
								}
								else if (pil.value == "B"){
									kol2b++;
								}
							}
						}
					}
					else if (i % 7 == 3) {
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									totalS++;
								}
								else if (pil.value == "B"){
									totalN++;
								}
							}
						}
					}
				}

				//Kol 4 & 5
				if (i % 7 == 4 || i % 7 == 5){
					if (i % 7 == 4){
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									kol4a++;
								}
								else if (pil.value == "B"){
									kol4b++;
								}
							}
						}
					}
					else if (i % 7 == 5) {
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									totalT++;
								}
								else if (pil.value == "B"){
									totalF++;
								}
							}
						}
					}
				}

				//Kol 6 & 7
				if (i % 7 == 6 || i % 7 == 0){
					if (i % 7 == 6){
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									kol6a++;
								}
								else if (pil.value == "B"){
									kol6b++;
								}
							}
						}
					}
					else if (i % 7 == 0) {
						for(j=0; j<pilihan.length; j++){
							var pil = pilihan[j];
							if (pil.checked){
								if (pil.value == "A"){
									totalJ++;
								}
								else if (pil.value == "B"){
									totalP++;
								}
							}
						}
					}
				}
			}

			if (totalE>=totalI) hasil+="E";
				else hasil+="I";

			if ((kol2a+totalS)>=(kol2b+totalN)) hasil+="S";
				else hasil+="N";


			if ((kol4a+totalT)>=(kol4b+totalF)) hasil+="T";
			else hasil+="F";


			if ((kol6a+totalJ)>=(kol6b+totalP)) hasil+="J";
			else hasil+="P";


			//document.getElementById("tempat_hasil").innerHTML="Kamu adalah orang yang memiliki tipe kepribadian " + hasil;

			window.location.href = 'hasil-kuis.php'+'?hasil='+hasil;
		}
	</script>