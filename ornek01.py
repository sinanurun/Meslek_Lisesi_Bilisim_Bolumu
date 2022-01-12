haso = {"gonderi_zaman":("12/01/2022","09:30"),
        "gonderi_durum":True,
        "begenenler":["Mahmut","Polat","Memo"],
        "yorum":{1:{"Serhat":"Beautiful","Haso":"Thank You Baby"},
                 2:{"Mahmut":"Cool","Mami":"Yeap"}
                 },
        "görüntülenme_sayısı":5000,
        "kaydet":55,
        "kaydedenler":["Atakan","Mustafa","Yusuf"]
        }
print(haso)
print(haso["begenenler"])
print(haso["yorum"])
print(haso["yorum"][1])
print(haso["yorum"][1].keys())
print(haso["yorum"][1].values())
print(haso["kaydedenler"])
print(haso["kaydedenler"][0])
print(haso["kaydedenler"][-1])
print(haso["begenenler"].append("Serhat"))
print(haso["begenenler"])
haso["görüntülenme_sayısı"] = haso["görüntülenme_sayısı"] + 300
print(haso["görüntülenme_sayısı"])
print(haso)
# haso["gonderi_zaman"][1] = "07:15"
del(haso["yorum"][1])
print(haso)
haso["yorum"][3] = {"yunus":"güzel foto"}
print(haso["yorum"])
haso["kaydedenler"].extend(["yusuf","mustafa","can"])
print(haso["kaydedenler"])
haso["gonderi_durum"] = False
print(haso["gonderi_durum"])
del(haso)
print(haso)




