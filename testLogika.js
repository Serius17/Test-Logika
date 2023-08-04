//Soal Nomor 1
function countPairs(socks) {
  const pairs = {};
  let count = 0;

  socks.forEach((sock) => {
    if (pairs[sock] > 0) {
      count++;
      pairs[sock]--;
    } else {
      pairs[sock] = (pairs[sock] || 0) + 1;
    }
  });

  return count;
}

const input1 = [10, 20, 20, 10, 10, 30, 50, 10, 20];
const output1 = countPairs(input1);
console.log("a. Output:", output1); // Output yang diharapkan: 3

const input2 = [6, 5, 2, 3, 5, 2, 2, 1, 1, 5, 1, 3, 3, 3, 5];
const output2 = countPairs(input2);
console.log("b. Output:", output2); // Output yang diharapkan: 6

const input3 = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];
const output3 = countPairs(input3);
console.log("c. Output:", output3); // Output yang diharapkan: 4

// Soal Nomor 2
function countWords(sentence) {
  const specialChars = ["[", "]", "*", "!", "=", "&", ".", ",", "?", ":", ";", "(", ")"];
  specialChars.forEach((char) => {
    sentence = sentence.replace(new RegExp("\\" + char, "g"), " ");
  });

  const words = sentence.split(/\s+/);
  const filteredWords = words.filter((word) => word.trim() !== "");
  return filteredWords.length;
}

// Test cases
const kata1 = "Saat meng*ecat tembok, Agung dib_antu oleh Raihan.";
const jumlah1 = countWords(kata1);
console.log("a. Output:", jumlah1); // Output yang diharapkan: 5

const kata2 = "Berapa u(mur minimal[ untuk !mengurus ktp?";
const jumlah2 = countWords(kata2);
console.log("b. Output:", jumlah2); // Output yang diharapkan: 3

const kata3 = "Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.";
const jumlah3 = countWords(kata3);
console.log("c. Output:", jumlah3); // Output yang diharapkan: 4
