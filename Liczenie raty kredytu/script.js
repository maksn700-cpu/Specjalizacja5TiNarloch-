function rataKredytu(kwota, oprocentowanieRoczne, lata) {
  const miesiace = lata * 12;
  const i = (oprocentowanieRoczne / 100) / 12; 

  if (i === 0) {
    return kwota / miesiace; 
  }

  const rata = kwota * (i * Math.pow(1 + i, miesiace)) / (Math.pow(1 + i, miesiace) - 1);
  return rata;
}

function obliczRate() {
  const kwota = parseFloat(document.getElementById("kwota").value);
  const oprocentowanie = parseFloat(document.getElementById("oprocentowanie").value);
  const lata = parseInt(document.getElementById("lata").value);

  if (isNaN(kwota) || isNaN(oprocentowanie) || isNaN(lata) || kwota <= 0 || oprocentowanie < 0 || lata <= 0) {
    document.getElementById("wynik").innerText = " Wprowadź poprawne dane!";
    return;
  }

  const rata = rataKredytu(kwota, oprocentowanie, lata);
  document.getElementById("wynik").innerText = "Miesięczna rata: " + rata.toFixed(2) + " zł";
}
